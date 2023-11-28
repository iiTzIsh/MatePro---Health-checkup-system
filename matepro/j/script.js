
function displayDoctors() {
  const container = document.querySelector('.container');
  container.innerHTML = '';  // Clear existing content

  for (let i = 0; i < doctors.length; i++) {
    const doctor = doctors[i];
   const doctorCard = 
   <div class="doctor-card"><center>
        
   <img src="Doctor.png" width="100px" height="100px">
       
     <h1>Dr. John Doe</h1>
     <section class="info">
       <h2>General Information</h2>
       <p>Specialization: Internal Medicine</p>
       <p>Experience: 15+ years</p>
     </section>
     <section class="contact">
       <h2>Contact Details</h2>
       <p>Email: john.doe@gmail.com</p>
       <p>Phone: +94-456-7890</p>
       <p>Address: 1234 Elm St, Maliban, Lotus State, Australia</p>
     </section>
   </div>
    
      <button onclick="editDoctor(${i})">Edit</button>
      <button onclick="deleteDoctor(${i})">Delete</button>
    ;
    container.innerHTML += <div class="doctor-card">${doctorCard}</div>;
  }
}

