function login(){
    try {
      let username = document.getElementById("un").value;
      let password = document.getElementById("pw").value;

      username = username.trim();
      username = username.toLowerCase();
      password = password.trim();

      if (username == "") {
        document.getElementById("un").focus;
        throw "Username cannot be empty";
        return false;
      }
      if (password == "") {
        document.getElementById("pw").focus;
        throw "Password cannot be empty";
        return false;
      }

      if(username=="Sehara2002"&&password=="Abc@123"){
          alert("Login Successful");
      }else{
          alert("Username or Password is Incorrect");
      }
    } catch (err) {
      alert(err);
    }
  }