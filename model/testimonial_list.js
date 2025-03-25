var APIBaseURL = "https://shopninja.in/bharatagri/api/public/api/admin/";

$(document).ready(function () {
    $("#testimonial_form").validate({
        rules: {
            title: {
                required: true,
                minlength: 3
            },
            description: {
                required: true,
                minlength: 10
            },
            image: {
                required: true
            }
        },
        messages: {
            title: {
                required: "Please enter a title",
                minlength: "Title must be at least 3 characters"
            },
            description: {
                required: "Please enter a description",
                minlength: "Description must be at least 10 characters"
            },
            image: {
                required: "Please select an image"
            }
        }
    });

    $("#submit_btn").click(function(e) {
        e.preventDefault();
        if ($("#testimonial_form").valid()) {
            addTestimonial();
        }
    });

    getTestimonials();
});

function addTestimonial() {
    console.log('Adding testimonial...');
    var formData = new FormData();
    var image = $('#image')[0].files[0];
    var title = $('#title').val();
    var description = $('#description').val();

    formData.append('image', image);
    formData.append('title', title);
    formData.append('description', description);

    $.ajax({
        url: APIBaseURL + 'add_testimonial',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(response) {
            alert('Testimonial added successfully!');
            $('#testimonial_form')[0].reset();
            getTestimonials();
            $('#addTestimonialModal').modal('hide');
        },
        error: function(xhr) {
            alert('Error: ' + (xhr.responseJSON?.message || 'Failed to add testimonial'));
        }
    });
}

function getTestimonials() {
    $.ajax({
        url: APIBaseURL + 'get_testimonials_admin',
        type: 'GET',
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(response) {
            populateTestimonialTable(response.data);
        },
        error: function(xhr) {
            alert('Error loading testimonials: ' + (xhr.responseJSON?.message || 'Server error'));
        }
    });
}

function populateTestimonialTable(testimonials) {
    var tableBody = $('#testimonials_table tbody');
    tableBody.empty();

    if (testimonials.length === 0) {
        tableBody.append('<tr><td colspan="4" class="text-center">No testimonials found</td></tr>');
        return;
    }

    $.each(testimonials, function(index, testimonial) {
        var shortDesc = testimonial.description.length > 50 ? 
            testimonial.description.substring(0, 50) + '...' : 
            testimonial.description;

        var row = '<tr>' +
            '<td>' + (index + 1) + '</td>' +
            '<td>' + testimonial.title + '</td>' +
            '<td>' + shortDesc + '</td>' +
            '<td>' +
            '<button class="btn btn-danger btn-sm" onclick="deleteTestimonial(' + testimonial.id + ')">' +
            '<i class="fa fa-trash"></i></button>' +
            '</td>' +
            '</tr>';

        tableBody.append(row);
    });
}

function deleteTestimonial(id) {
    if (!confirm('Are you sure you want to delete this testimonial?')) {
        return;
    }

    $.ajax({
        url: APIBaseURL + 'delete_testimonial/' + id,
        type: 'DELETE',
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(response) {
            alert('Testimonial deleted successfully');
            getTestimonials();
        },
        error: function(xhr) {
            alert('Error deleting testimonial: ' + (xhr.responseJSON?.message || 'Server error'));
        }
    });
}

function resetForm() {
    $('#testimonial_form')[0].reset();
    $('#image').val('');
}