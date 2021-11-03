const buttonCopy = document.getElementById("button-copy");
const textField = document.getElementById("copy-text");
const result = document.getElementById("lsf");

textField.addEventListener("keyup", function(e){
    let text = textField.value.toLowerCase();
    let fin = text.length-1;
    result.innerHTML ='';
for(let i = 0; i <= fin; i++) {
        if(text.charAt(i)<'a' || text.charAt(i)>'z'){
            continue;
        }
        let test ='http://localhost/wordpress_a11e/wp-content/themes/theme_a11e/assets/images/svg/'+text.charAt(i)+'.svg';
        console.log(test);
        result.innerHTML += "<img class='signs' src='"+test+"'>";
    }
})