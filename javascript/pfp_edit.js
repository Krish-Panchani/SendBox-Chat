var fileTag = document.getElementById("pfp"),
    preview = document.getElementById("preview");
    
fileTag.addEventListener("change", function() {
  changeImage(this);
});

function changeImage(input) {
  var reader;

  if (input.files && input.files[0]) {
    reader = new FileReader();

    reader.onload = function(e) {
      preview.setAttribute('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

// const sendBtn = form.querySelector(".pfp-save"),
// inputField = form.querySelector(".input-field"),
// form = document.querySelector(".pfp-update-area");

// sendBtn.onclick = ()=>{
//   let xhr = new XMLHttpRequest();
//   xhr.open("POST", "php/update.php", true);
//   xhr.onload = ()=>{
//     if(xhr.readyState === XMLHttpRequest.DONE){
//         if(xhr.status === 200){
//             inputField.value = "";
//         }
//     }
//   }
//   let formData = new FormData(form);
//   xhr.send(formData);
// }