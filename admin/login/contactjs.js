



function updateContact() {
    // Get input values
    console.log("updatecontacts");
    var Email = document.getElementById('Email').value;
    var PhoneNumber = document.getElementById('PhoneNumber').value;
    var Phonenumber2 = document.getElementById('PhoneNumber2').value;
    var Location = document.getElementById('Location').value; 
    var WorkingHours = document.getElementById('WorkingHours').value; 

 var dataformat= {Email: Email, PhoneNumber: PhoneNumber, Phonenumber2: Phonenumber2, Location: Location, WorkingHours: WorkingHours};
    // Save prices to the server using AJAX
    $.ajax({
        type: "POST",
        url: "https://retrodtech.com/admin/login/contact_server.php",
    
        data: dataformat,
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.error(error);
        }
    });
}


// function addBlog(){
//     var title = $("#InputTitle").val();
//     var content = $("#titleContent").val();
//     var date = $("#date").val();
//     var url = $("#basic-url");
// }