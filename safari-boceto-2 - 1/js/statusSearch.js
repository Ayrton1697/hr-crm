$( document ).ready(function() {
    console.log( "ready!" );

let app_url = document.getElementById('app_url');

// console.log((app_url.value));
// console.log(myToken.csrfToken);

let status_search = document.getElementById('status_search');

let posting_id = document.getElementById('job_posting_id');
let table =  document.getElementById('applicants_table');

status_search.addEventListener("change", (event) => {
    console.log(status_search.value);
    console.log(posting_id.value);
  
    //   var selection = status_search.value;
    //   var dataset = $('#applicants_table tbody').find('tr');
    //   // show all rows first
    //   dataset.show();
    //   // filter the rows that should be hidden
    //   dataset.filter(function(index, item) {
    //     return $(item).find('td:first-child').text().split(',').indexOf(selection) === -1;
    //   }).hide();
  


        axios.post(String(app_url.value) + 'public/dashboard/status_search',{
            'status':status_search.value,
            'job_posting_id':posting_id.value
    
        })
        .then(response => {location.reload();}).catch(
            error => {
                console.log(error);
            }
        )
          })
  
});

// status.onchange(()=>{
//     axios.post('job_posting.edit',{
//         status.value
//     })
// })