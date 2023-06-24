$( document ).ready(function() {
    console.log( "ready!" );

let app_url = document.getElementById('app_url');

// console.log((app_url.value));
// console.log(myToken.csrfToken);

let posting_id = document.getElementById('job_posting_id');

let status = document.querySelectorAll('.status');
status.forEach(element => {
    console.log(element)
});

status.forEach(element => {
    element.addEventListener("change", (event) => {
        console.log(element.id)

        axios.post(String(app_url.value) + 'public/job_postings/edit_user_status',{
            'job_posting_id':posting_id.value,
            'user_id' : element.id,
            'value' : element.value
        }).then(response => {location.reload();}).catch(
            error => {
                console.log(error);
            }
        )
          })
    });
});

// status.onchange(()=>{
//     axios.post('job_posting.edit',{
//         status.value
//     })
// })