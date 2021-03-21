//Dropzone
Dropzone.options.dropzoneForm = {
    acceptedFiles: 'application/pdf',
    autoProcessQueue: false,
    maxFilesize: 10, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    dictRemoveFile: "X",
    dictRemoveFileConfirmation: "remove file?",
    dictDefaultMessage: "<img src= http://localhost/pjit-front-end/assets/client/img/upload-file.svg> <br><br> Drag and drop to upload file here <br> or <span style=color:#2E157E;text-decoration:underline>browse in your computer</span>",
    removedfile: function(file) {
        var name = file.name;
        var changeName = name.replace(/ /g, "_");
        // $.ajax({
        // 	type: 'POST',
        // 	url: '<?php echo base_url() ?>index.php/Client/CreateNewProjectDashboard/deleteUploadInquiry',
        // 	data: {
        // 		name: changeName
        // 	},
        // 	success: function(data) {
        // 		console.log('success: ' + data);
        // 		$('input[name="attachment"]').val('');
        // 	}
        // });
        // var _ref;
        if (this.getQueuedFiles().length == 0) {
            $('#buttonAddProject').prop('disabled', true);
            $('input[name="attachment"]').val('');
        } else if (this.getQueuedFiles().length == 1) {
            $('#buttonAddProject').prop('disabled', false);

        }
        return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;


    },
    init: function() {
        this.on("addedfile", function(file) {
            // if (!confirm("Do you want to upload the file?")) {
            // 	if (this.getQueuedFiles().length == 0) {
            // 		$('#buttonAddProject').prop('disabled', false);
            // 	}else{
            // 		$('#buttonAddProject').prop('disabled', false);
            // 	}
            // 	this.removeFile(file);
            // 	return false;
            // }
            if (this.getQueuedFiles().length == 0) {
                var name = file.name
                var changeName = name.replace(/ /g, "_");
                $('input[name="attachment"]').val(changeName);
            }
            $('.field input').each(function() {
                if ($(this).val().length == 0) {
                    $('#buttonAddProject').prop('disabled', 'disabled');
                } else {
                    $('#buttonAddProject').prop('disabled', false);
                }

            });
            //prints the correct filenames
            console.log(changeName);
        });
        this.on("error", function(file) {
            $('#buttonAddProject').prop('disabled', true);
        });
        if (this.getQueuedFiles().length == 0) {
            $('#buttonAddProject').prop('disabled', true);
        }

        // var submitButton = document.querySelector("#buttonAddProject");
        // myDropzone = this; // closure
        // submitButton.addEventListener("click", function() {
        // 	myDropzone.processQueue(); // Tell Dropzone to process all queued files.
        // });

        // this.on('uploadprogress', function(file) {
        // 	var name = file.name
        // 	var changeName = name.replace(/ /g, "_");
        // 	//prints the correct filenames
        // 	$('input[name="attachment"]').val(changeName);
        // 	console.log(changeName);
        // });
    }
};