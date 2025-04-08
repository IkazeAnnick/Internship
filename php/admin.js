document.addEventListener('DOMContentLoaded', () => {
    let users = [];
    let userId = 1;

    document.getElementById('add-user').addEventListener('click', addUser);

    function addUser() {
        let name = document.getElementById('name').value.trim();
        let email = document.getElementById('email').value.trim();
        let rating = document.getElementById('rating').value.trim();
        let comments = document.getElementById('comments').value.trim();

        if (name && email && rating && comments) {
            users.push({ id: userId++, name, email, rating, comments });
            displayUsers();
            clearInputs();
        } else {
            alert('Please fill in all fields!');
        }
    }

    function displayUsers() {
        let tableBody = document.getElementById('user-table-body');
        tableBody.innerHTML = '';
        users.forEach(user => {
            let row = document.createElement('tr');
            row.innerHTML = `<td>${user.name}</td>
                             <td>${user.email}</td>
                             <td>${user.rating}</td>
                             <td>${user.comments}</td>
                             <td>
                                <button class="edit" onclick="editUser(${user.id})">Edit</button>
                                <button class="delete" onclick="deleteUser(${user.id})">Delete</button>
                             </td>`;
            tableBody.appendChild(row);
        });
    }

    window.deleteUser = function(id) {
        users = users.filter(user => user.id !== id);
        displayUsers();
    }

    window.editUser = function(id) {
        let user = users.find(u => u.id === id);
        if (user) {
            let newName = prompt('Enter new name:', user.name);
            let newEmail = prompt('Enter new email:', user.email);
            let newRating = prompt('Enter new rating (1-5):', user.rating);
            let newComments = prompt('Enter new comments:', user.comments);
            if (newName && newEmail && newRating && newComments) {
                user.name = newName;
                user.email = newEmail;
                user.rating = newRating;
                user.comments = newComments;
                displayUsers();
            }
        }
    }

    function clearInputs() {
        document.getElementById('name').value = '';
        document.getElementById('email').value = '';
        document.getElementById('rating').value = '';
        document.getElementById('comments').value = '';
    }
});
