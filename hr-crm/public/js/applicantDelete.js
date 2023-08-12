$( document ).ready(function() {
    console.log( "ready!" );

let app_url = document.getElementById('app_url');

// console.log((app_url.value));
// console.log(myToken.csrfToken);

let posting_id = document.getElementById('JobPosting_id').value;

let status = document.querySelectorAll('.delete-applicant');
status.forEach(element => {
    console.log(element)
});

status.forEach(element => {
    element.addEventListener("click", (event) => {
        console.log(element.id)
        console.log(posting_id)
        axios.post(String(app_url.value) + 'public/JobPostings/delete_applicant',{
            'JobPosting_id':posting_id,
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
//     axios.post('JobPosting.edit',{
//         status.value
//     })
// })