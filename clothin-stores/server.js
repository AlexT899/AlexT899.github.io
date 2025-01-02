const express=require("express");
const app=express();
const path=require("path");
const { MongoClient, ServerApiVersion } = require('mongodb');


const uri = "mongodb+srv://Alex:8EgOtDG08R4kCydn@welcome.ie3bi.mongodb.net/?retryWrites=true&w=majority&appName=Welcome";// Create a MongoClient with a MongoClientOptions object to set the Stable API version
const client = new MongoClient(uri, {
serverApi: {
version: ServerApiVersion.v1,
strict: true,
deprecationErrors: true,
}
});

app.use(express.json());
app.use("/art", express.static(__dirname + '/art'));
let user=new Object();
app.get("/",(req,res)=>
{
    res.sendFile(path.resolve(__dirname,"HomePage.html"));
    // res.send("/welcome/greeting.gif");
    // res.send("/welcome/ws.png");
    console.log("File sent");
});
app.post("/sendUser",async(req,res)=>
{
    user=
    {
        Email:req.body.Email,
        First:req.body.First,
        Last:req.body.Last
    }
    console.log(user);
    await client.connect();
    await client.db("admin").command({ ping: 1 });
    console.log("Entered Mongo");
    const database =await client.db('Users');
    const collection =await database.collection('ChatWebpage');
    collection.insertOne(user);
});

app.listen(4010);
