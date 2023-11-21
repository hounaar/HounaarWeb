const form = document.querySelector(".answer"),
continueBtn = form.querySelector(".submit"),
errorText = form.querySelector(".error"),
successText = form.querySelector(".success"),
back = form.querySelector(".back");

form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "/src/php/answers/dark.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "Solved"){
                successText.style.display = "block";
                successText.textContent = data;
                back.style.display = "block";
              }
              else{
                errorText.style.display = "block";
                errorText.textContent = data;
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}