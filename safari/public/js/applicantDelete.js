$( document ).ready(function() {
    console.log( "ready!" );

let app_url = document.getElementById('app_url');

// console.log((app_url.value));
// console.log(myToken.csrfToken);

let posting_id = document.getElementById('job_posting_id').value;

let status = document.querySelectorAll('.delete-applicant');
status.forEach(element => {
    console.log(element)
});

status.forEach(element => {
    element.addEventListener("click", (event) => {
        console.log(element.id)
        console.log(posting_id)
        axios.post(String(app_url.value) + 'public/job_postings/delete_applicant',{
            'job_posting_id':posting_id,
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