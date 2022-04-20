
        edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit",);
                tr = e.target.parentNode.parentNode;
                // console.log(tr);
                title = tr.getElementsByTagName('td')[0].innerText;
                description = tr.getElementsByTagName('td')[1].innerText;
                console.log(title, description);
                titleEdit.value = title;
                descriptionEdit.value = description;
                srnoEdit.value = e.target.id;
                console.log(e.target.id);
                $('#editModal').modal('toggle');

            });
        });

        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                sno = e.target.id.substr(1,);
                // tr=e.target.parentNode.parentNode;
                // console.log(tr);
                if (confirm("Press a Button ")) {
                    console.log("yes");
                    window.location = `/crudproject/index.php?delete=${sno}`;
                    //Create a form to use POST method for security 
                }
                else {
                    console.log("no");
                }

            });
        });
    