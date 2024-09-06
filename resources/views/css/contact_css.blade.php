<style>
    header{
    height: 80vh;
    background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('/images/solar-service2.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.header-content h1{
    color: white;
}
.header-content {
    position: absolute;
    text-align: center;
    top: 80%;
    left: 50%;
    transform: translate(-50%, -50%);
}
 
.container{
    max-width: 1200px;
    width: 90%;
    margin: 0 auto;
}
/*-------utility classes-----------*/

.md-heading{
    font-size: 2.2rem;
}
.text-light{
    color:#f4f4f4;
}

.btn{
    display: inline-block;
    padding: 0.5em 1.5rem;
    font-weight:500;
    text-transform: uppercase;
    margin: 0.5em 0;
}
.btn-primary{
    background-color: transparent;
    border-radius: 100px;    /*10em*/
    color: white;
    border: 2px solid white;
}
.btn-primary:hover{
    background-color: #ddd;
    color: #333;
}
.btn-secondary{
    background-color:black;
    border-radius:50px;
    color: #fff;
    position: relative;
    left: 43%;
    margin-top: 20px;
    padding: 10px 25px;
} 
.btn-secondary:hover{
    background-color: #fcf3f2;
    color: #263226;
    border: 2px solid black;
}
.contact-box{
    display: flex; 
    justify-content: center;
    font-size: 2.5rem;
    color: #333; 
    background-color: #f3f0f0;
    text-align: center;
    padding-top: 10px;
 }
.contact-box i{
    width: 60px; /* Adjust the size of the icon as needed */
    height: auto; 
    margin-right: 40px;
}  
h2{
    text-align: center;
    margin-bottom: 10px;
    font-size: 30px;
}
p{
    text-align: center;
    font-size: 20px;
}
section{
    background-color: #f3f0f0;
    padding-bottom: 5px;
} 
form {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 15px;
}
label {
    font-size: 20px;
}
input[type="text"],
input[type="email"],
textarea,
select{
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    background-color: white;
}

.contact-info a {
    display: block;
    margin-bottom: 2px;
    font-size: 15px;
    color:blue;
    text-decoration: none;
}
.contact-info a:hover {
    color: orangered
}
    </style>