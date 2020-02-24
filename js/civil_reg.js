
/*This below function will accept only number values */
function isNumberKey(e, t) {
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        }
        else if (e) {
            var charCode = e.which;
        }
        else { return true; }
        if ((charCode > 47  && charCode < 58) || (charCode >= 08 && charCode <= 16))
            return true;
        else
            return false;
    }
    catch (err) {
        alert(err.Description);
    }
}

/*This below function will accept only Alphabets values */
function onlyAlphabets(e, t) {
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        }
        else if (e) {
            var charCode = e.which;
        }
        else { return true; }
        if ( (charCode >= 08 && charCode <= 16) || (charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
            return true;
        else
            return false;
    }
    catch (err) {
        alert(err.Description);
    }
}


//this used for to check whether empty is der
$("#image").change(function ()
{
    var file = this.files[0];
    var i_width = 5000;  //size is in kb
    displayImage(file,i_width);
});

function displayImage(files,i_width)
{
    var reader = new FileReader();
    var img = new Image();
    var ext = $('#image').val().split('.').pop().toLowerCase();
    reader.onload = function (e)
    {
        img.src = e.target.result;
        fileSize = Math.round(files.size / 1024);
        if($.inArray(ext, ['gif','png','jpg','jpeg']) != -1 )
        {
            img.onload = function ()
            {
                if(fileSize  <=  i_width )
                {
                    /*alert('image loaded!');*/
                    return
                }
                else
                {
                    alert("Image size should be less than Size=" + i_width);
                    $("#image").closest('form').trigger('reset');
                    return false;
                }
            };
        }
        else
        {
            alert('Invalid image file type!');
            $("#image").closest('form').trigger('reset');
            return false;
        }
    };
    reader.readAsDataURL(files);
}//end of displayImage()