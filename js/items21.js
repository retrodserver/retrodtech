
$(document).ready(function() {
    document.getElementById('submit3').addEventListener('click', function(e) {
        e.preventDefault(); // Prevent the default form submission behavior
    
        const checkboxes = document.querySelectorAll('#form3 input[type="checkbox"]');
        const checkedValues = [];
    
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
        var iconId = $(checkbox).attr('name') + 'Icon';
          console.log(iconId);
          checkedValues.push(iconId);
                
            }
        });
    
        console.log(checkedValues);
    
        $.ajax({
            type: 'GET',
            url: 'https://retrodtech.com/include/storeitem3.php', // Adjust the path to the actual location of your PHP file
            data: { checkedValues: checkedValues },
            success: function(response) {
                console.log('Checked values sent successfully. Server response:', response);
                swal("Updated successfully!", "Thank you!", "success");
            },
            error: function(error) {
                console.error('Error sending checked values:', error);
            }
        });
        
    
    });
    
    
    
    
    });
    
    
    
    