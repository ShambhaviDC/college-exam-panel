
<!DOCTYPE html>
<html>
<head>
<title>Exam Panel System</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:Arial;}
body{background:linear-gradient(135deg,#1e3c72,#2a5298);min-height:100vh;}
.header{background:white;padding:18px;text-align:center;box-shadow:0 4px 10px rgba(0,0,0,0.2);}
.header h1{color:#1e3c72;}
.container{width:90%;max-width:900px;margin:40px auto;background:white;padding:25px;border-radius:12px;box-shadow:0 8px 20px rgba(0,0,0,0.3);}
h2{text-align:center;margin-bottom:20px;color:#1e3c72;}
input,select{width:100%;padding:10px;margin:8px 0;border-radius:6px;border:1px solid #ccc;}
button{width:100%;padding:10px;background:#1e3c72;color:white;border:none;border-radius:6px;margin-top:10px;cursor:pointer;}
button:hover{background:#16325c;}
table{width:100%;margin-top:20px;border-collapse:collapse;}
th{background:#1e3c72;color:white;}
th,td{padding:10px;border:1px solid #ddd;text-align:center;}
tr:nth-child(even){background:#f2f2f2;}
.hidden{display:none;}
.branch-buttons{
display:flex;
justify-content:center;
gap:20px;
margin-bottom:25px;
}

.branch-buttons button{
width:200px;
padding:12px;
background:#1e3c72;
color:white;
border:none;
border-radius:8px;
cursor:pointer;
font-size:16px;
transition:0.3s;
}

.branch-buttons button:hover{
background:#16325c;
transform:scale(1.05);
}

</style>
</head>
<body>

<div class="header">
<h1>Siddaganga Institute of Technology</h1>
<h3>EXAM PANEL MANAGEMENT SYSTEM</h3>
<h3>Tumakuru – 573103</h3>
</div>

<!-- LOGIN -->
<div class="container" id="loginDiv">
<h2>Login</h2>
<input type="text" id="username" placeholder="Username">
<input type="password" id="password" placeholder="Password">
<button onclick="login()">Login</button>
</div>

<!-- FACULTY PANEL -->
<div class="container hidden" id="facultyDiv">
<h2>Faculty Panel</h2>

Semester:
<select id="semester" onchange="loadSubjects()">
<option value="">Select Semester</option>
<option>1</option><option>2</option><option>3</option>
<option>4</option><option>5</option><option>6</option>
<option>7</option><option>8</option>
</select>

Department:
<select id="department" onchange="loadSubjects()">
<option value="">Select Department</option>
<option value="CSE">CSE</option>
<option value="AIML">CSE(AIML)</option>
<option value="AIDS">CSE(AIDS)</option>
</select>

Subject:
<select id="subject">
<option value="">Select Subject</option>
</select>

Internal 1:
<select id="internal1" onchange="preventDuplicateInternal()">
<option value="">Select Internal 1</option>
<option>Pramod TC</option>
<option>Sheela S</option>
<option>Kallinath</option>
<option>Sunitha NR</option>
<option>Manjushree</option>
<option>KG Manjunath</option>
<option>AH Shanthakumara</option>
<option>AV Krishnamohan</option>
<option>H Srinivas</option>
<option>M Kavitha</option>
<option>KR Prasannakumar</option>
<option>S Tejaswini</option>
<option>V Ravi</option>
<option>SP Gururaj</option>
<option>RM Savithramma</option>
<option>BP Ashwini</option>
<option>Shruthi K</option>
<option>Shwetha AN</option>
<option>Shobha K</option>
<option>Bharathi PT</option>
<option>TM Kiran Kumar</option>
<option>Sowmya MN</option>
<option>Anupama TA</option>
<option>Tejaswini DA</option>
<option>Navyashree S</option>
<option>Shilpa SP</option>
<option>Akshatha Y</option>
<option>Anupama BS</option>
<option>Rajeshwari KR</option>
</select>

Internal 2:
<select id="internal2">
<option value="">Select Internal 2</option>
<option>Pramod TC</option>
<option>Sheela S</option>
<option>Kallinath</option>
<option>Sunitha NR</option>
<option>Manjushree</option>
<option>KG Manjunath</option>
<option>AH Shanthakumara</option>
<option>AV Krishnamohan</option>
<option>H Srinivas</option>
<option>M Kavitha</option>
<option>KR Prasannakumar</option>
<option>S Tejaswini</option>
<option>V Ravi</option>
<option>SP Gururaj</option>
<option>RM Savithramma</option>
<option>BP Ashwini</option>
<option>Shruthi K</option>
<option>Shwetha AN</option>
<option>Shobha K</option>
<option>Bharathi PT</option>
<option>TM Kiran Kumar</option>
<option>Sowmya MN</option>
<option>Anupama TA</option>
<option>Tejaswini DA</option>
<option>Navyashree S</option>
<option>Shilpa SP</option>
<option>Akshatha Y</option>
<option>Anupama BS</option>
<option>Rajeshwari KR</option>
</select>

<h3>External 1</h3>
<input type="text" id="ex1_name" placeholder="Name">
<input type="text" id="ex1_college" placeholder="College">
<input type="email" id="ex1_email" placeholder="Email">
<input type="text" id="ex1_contact" placeholder="Contact No">
<input type="text" id="ex1_experience" placeholder="Years of Experience">

<h3>External 2</h3>
<input type="text" id="ex2_name" placeholder="Name">
<input type="text" id="ex2_college" placeholder="College">
<input type="email" id="ex2_email" placeholder="Email">
<input type="text" id="ex2_contact" placeholder="Contact No">
<input type="text" id="ex2_experience" placeholder="Years of Experience">


<button onclick="submitData()">Submit</button>
<button onclick="logout()">Logout</button>
</div>

<!-- ADMIN PANEL -->
<!-- ADMIN PANEL -->
<div class="container hidden" id="adminDiv">

<h2>Admin Dashboard</h2>

<!-- Branch Buttons -->
<div class="branch-buttons">
<button onclick="showBranchDashboard('CSE')">CSE</button>
<button onclick="showBranchDashboard('AIML')">CSE(AIML)</button>
<button onclick="showBranchDashboard('AIDS')">CSE(AIDS)</button>
</div>


<!-- Semester Status Table -->
<table>
<thead>
<tr>
<th>Semester</th>
<th>Status</th>
</tr>
</thead>
<tbody id="dashboardTable"></tbody>
</table>

<br><br>

<h3>Detailed Panel Records</h3>

<table>
<thead>
<tr>
<th>Sem</th>
<th>Dept</th>
<th>Subject</th>
<th>Internal1</th>
<th>Internal2</th>
<th>External1</th>
<th>External2</th>
</tr>
</thead>
<tbody id="adminTable"></tbody>
</table>

<button onclick="downloadData()">Download Panel List</button>
<button onclick="logout()">Logout</button>

</div>



<script>

function login(){
let user=username.value;
let pass=password.value;

if(user==="faculty" && pass==="123"){
loginDiv.classList.add("hidden");
facultyDiv.classList.remove("hidden");
}
else if(user==="admin" && pass==="admin123"){
loginDiv.classList.add("hidden");
adminDiv.classList.remove("hidden");
loadAdminData();
}
else{
alert("Invalid Login");
}
}

function loadSubjects(){
let sem=semester.value;
let dept=department.value;
let subjectDropdown=document.getElementById("subject");

subjectDropdown.innerHTML="<option value=''>Select Subject</option>";

let subjects=[];

if(sem=="1")
subjects=["C Programming","Web Development","Physics Lab"];
else if(sem=="2")
subjects=["Chemistry Lab","Python","MATLAB"];
else if(sem=="3")
subjects=["DSA Lab","Operating Systems Lab","DCCN Lab"];
else if(sem=="4")
subjects=["DAA Lab","TOC Lab","Microcontroller Lab"];
else if(sem=="5")
subjects=["DBMS","DSP","AIML Lab"];
else if(sem=="6"){
if(dept==="CSE")
subjects=["IOT Lab","CN Lab","Fullstack Lab"];
else if(dept==="AIML")
subjects=["CN Lab","IOT Lab","AI Driven Cybersecurity Lab"];
else if(dept==="AIDS")
subjects=["CN Lab","IOT Lab","Distributed Data Storage"];
}
else if(sem=="7")
subjects=["NLP","Software Testing"];
else if(sem=="8")
subjects=["Generative AI","Quantum Computing"];

subjects.forEach(function(sub){
let option=document.createElement("option");
option.value=sub;
option.text=sub;
subjectDropdown.appendChild(option);
});
}

function preventDuplicateInternal(){
let selected=internal1.value;
for(let i=0;i<internal2.options.length;i++){
internal2.options[i].disabled=false;
if(internal2.options[i].value===selected){
internal2.options[i].disabled=true;
}
}
internal2.value="";
}

function submitData(){

if(internal1.value===internal2.value){
alert("Internal 1 and Internal 2 cannot be same!");
return;
}

let formData=new FormData();
formData.append("sem",semester.value);
formData.append("dept",department.value);
formData.append("subject",subject.value);
formData.append("internal1",internal1.value);
formData.append("internal2",internal2.value);

formData.append("external1",ex1_name.value);
formData.append("ex1_college",ex1_college.value);
formData.append("ex1_email",ex1_email.value);
formData.append("ex1_contact",ex1_contact.value);
formData.append("ex1_experience",ex1_experience.value);

formData.append("external2",ex2_name.value);
formData.append("ex2_college",ex2_college.value);
formData.append("ex2_email",ex2_email.value);
formData.append("ex2_contact",ex2_contact.value);
formData.append("ex2_experience",ex2_experience.value);

fetch("save.php",{
method:"POST",
body:formData
})
.then(response=>response.text())
.then(data=>{
if(data.trim()==="success"){
alert("Panel Created Successfully!");
location.reload();
}else{
alert(data);
}
});
}


function loadAdminData(){
fetch("fetch.php")
.then(res=>res.json())
.then(data=>{
adminTable.innerHTML="";
data.forEach(p=>{
adminTable.innerHTML+=`
<tr>
<td>${p.sem}</td>
<td>${p.dept}</td>
<td>${p.subject}</td>
<td>${p.internal1}</td>
<td>${p.internal2}</td>
<td>${p.external1}</td>
<td>${p.external2}</td>
</tr>`;
});
});
}

function downloadData(){
window.location="download.php";
}

function logout(){
location.reload();
}

function showBranchDashboard(branch){

fetch("fetch.php")
.then(res => res.json())
.then(data => {

let dashboard = document.getElementById("dashboardTable");
dashboard.innerHTML = "";

for(let sem=1; sem<=8; sem++){

let found = data.find(p => p.dept === branch && p.sem == sem);

let row = document.createElement("tr");

let statusCell = "";

if(found){
statusCell = "<span style='color:green;font-weight:bold;'>Completed</span>";
}
else{
statusCell = "<span style='color:red;font-weight:bold;'>Pending</span>";
}

row.innerHTML = `
<td>${sem}</td>
<td>${statusCell}</td>
`;

dashboard.appendChild(row);
}

});
}

</script>

</body>
</html>
