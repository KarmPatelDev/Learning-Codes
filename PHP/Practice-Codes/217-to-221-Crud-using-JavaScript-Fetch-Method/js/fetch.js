function loadTable(){
    fetch('php/load-table.php')
    .then((response) => response.json())
    .then((data) => {
        var tbody = document.getElementById('tbody');
        if(data['empty']){ 
            tbody.innerHTML = '<tr><td colspan= "5"><h3>No Record Found</h3></td></tr>';
        }
        else{
            var tr = '';
            for(var i in data){
                tr += `<tr>
                       <td>${data[i].name}</td>
                       <td>${data[i].age}</td>
                       <td>${data[i].city}</td>
                       <td><button class="edit-btn" onclick="editRecord(${data[i].id})">Edit</btn></td>
                       <td><button class="delete-btn" onclick="deleteRecord(${data[i].id})">Delete</btn></td>
                       </tr>`;
            }
            tbody.innerHTML = tr;
        }
    }).catch((error) => {
        show_message("error", "Can't Fetch Data");
    })
}

loadTable();

function submit_data(){
    var name_val = document.getElementById('name').value;
    var age_val = document.getElementById('age').value;
    var city_val = document.getElementById('city').value;

    if(name_val == '' || age_val == '' || city_val == ''){
        show_message('error', 'Fill all fields');
        return false;
    }
    else{
        var  formData = {  // object
            'name' : name_val,
            'age' : age_val,
            'city' : city_val
        }

        jsonData = JSON.stringify(formData) // convert to json

        fetch('php/insert-data.php', {
            method: "POST",
            body: jsonData, 
            header: { // info about data
                'Content-Type': 'application/json',
            }
        })
        .then((response) => response.json())
        .then((result) => {
            if(result.insert == 'success'){
               loadTable();
               show_message('success', 'Data inserted successfully');
               document.getElementById('addForm').reset();
            }
            else{
               show_message('error', 'Data can not inserted'); 
            }
        }).catch((error) => {
            show_message("error", "Data not inserted");
        });
    }
}

function hide_modal(){
    var modal = document.getElementById('modal');
    modal.style.display = "none";
}

function editRecord(id){
    var modal = document.getElementById('modal');
    modal.style.display = "block"; 
    
    fetch('php/fetch-edit.php?edit=' + id)
    .then((response) => response.json())
    .then((data) => {
        document.getElementById('edit_id').value = data[0].id;
        document.getElementById('edit_name').value = data[0].name;
        document.getElementById('edit_age').value = data[0].age;
        document.getElementById('edit_city').value = data[0].city;
        
    }).catch((error) => {
        show_message("error", "Can't Fetch Data");
    })

}

function submit_edit_data(){
    var id_val = document.getElementById('edit_id').value;
    var name_val = document.getElementById('edit_name').value;
    var age_val = document.getElementById('edit_age').value;
    var city_val = document.getElementById('edit_city').value;

    if(id_val == '' || name_val == '' || age_val == '' || city_val == ''){
        show_message('error', 'Fill all fields');
        return false;
    }
    else{
        var  formData = {  // object
            'id' : id_val,
            'name' : name_val,
            'age' : age_val,
            'city' : city_val
        }

        jsonData = JSON.stringify(formData) // convert to json

        fetch('php/update-data.php', {
            method: "PUT",
            body: jsonData, 
            header: { // info about data
                'Content-Type': 'application/json',
            }
        })
        .then((response) => response.json())
        .then((result) => {
            if(result.update == 'success'){
               loadTable();
               show_message('success', 'Data updated successfully');
               document.getElementById('editForm').reset();
               hide_modal();
            }
            else{
               show_message('error', 'Data can not inserted'); 
            }
        }).catch((error) => {
            show_message("error", "Data not inserted");
        });
    }
}

function deleteRecord(id){
    
    if(confirm("Are You Sure To Delete")){
        fetch('php/fetch-delete.php?delete=' + id, {method: "DELETE"})
        .then((response) => response.json())
        .then((result) => {   
            if(result.delete == 'success'){
                loadTable();
                show_message('success', 'Data deleted successfully');
             }
             else{
                show_message('error', 'Data can not deleted'); 
             }
        }).catch((error) => {
            show_message("error", "Can't Delete Data");
        })
    }
    else{
        show_message("error", "Can not Delete Data");
    }
    
}

function load_search(){

    var search = document.getElementById('search').value;

    if(search == ""){
        loadTable();
        return false();
    }
    else{
        fetch('php/fetch-search.php?search=' + search)
        .then((response) => response.json())
        .then((data) => {
            var tbody = document.getElementById('tbody');
            if(data['empty']){ 
                tbody.innerHTML = '<tr><td colspan= "5"><h3>No Record Found</h3></td></tr>';
            }
            else{
                var tr = '';
                for(var i in data){
                    tr += `<tr>
                        <td>${data[i].name}</td>
                        <td>${data[i].age}</td>
                        <td>${data[i].city}</td>
                        <td><button class="edit-btn" onclick="editRecord(${data[i].id})">Edit</btn></td>
                        <td><button class="delete-btn" onclick="deleteRecord(${data[i].id})">Delete</btn></td>
                        </tr>`;
                }
                tbody.innerHTML = tr;
            }
        }).catch((error) => {
            show_message("error", "Can't Fetch Data");
        })
    }
    
}

function show_message(type, text){
    if(type == 'error'){
        var message_box = document.getElementById('error-message');
    }
    else{
        var message_box = document.getElementById('success-message');
    }

    message_box.innerHTML = text;
    message_box.style.display = "block";
    setTimeout(function(){
        message_box.style.display = "none";
    }, 3000);
    
}