import './bootstrap';

$(function() {
    $('#datepicker').datepicker({
        format: 'dd-mm-yyyy'
    });
    $('#select-all').click(function(event) {   
        if(this.checked) {
            // Iterate each checkbox
            $(':checkbox').each(function() {
                this.checked = true;                        
            });
        } else {
            $(':checkbox').each(function() {
                this.checked = false;                       
            });
        }
    }); 
});