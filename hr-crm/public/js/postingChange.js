$( document ).ready(function() {
    console.log( "ready!" );

let app_url = document.getElementById('app_url');

// console.log((app_url.value));
// console.log(myToken.csrfToken);
let from_posting_id = document.getElementById('JobPosting_id');

let to_posting_id = document.getElementById('posting_change');

let applicant_id = document.getElementById('applicant_id');

let posting_change = document.querySelectorAll('.posting_change');
posting_change.forEach(element => {
    console.log(element)
});

posting_change.forEach(element => {
    element.addEventListener("change", (event) => {
        console.log(from_posting_id.value)
        console.log(to_posting_id.value)
        console.log(applicant_id.value)
        axios.post(String(app_url.value) + 'public/JobPostings/posting_change',{
            'from_JobPosting':from_posting_id.value,
            'to_JobPosting':to_posting_id.value,
            'user_id' : applicant_id.value
        }).then(
            response => {
                location.reload();
           
            }).catch(
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