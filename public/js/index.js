const app = Vue.createApp({
   data(){
  
      return{
         fname:  "",
         lname: "",
         email: "",
         password: "",
         section: "",
         TimeIn: "",
         firstname: "{{ $user->firstname }}",
         lastname: "{{ $user->lastname }}",
         section: "",
         messages: [],
         timeout: [],
         Firstname: '',
         Lastname: '',
         Section: '',
         hide: false,
         id: '',
         timeOut: '',
         response: '',
         timein: '',
         sec: '',
         datimeIN: '',
         datimeOUT: '',
         user: '',
         pwd: '',
         seksyon: '',

      }
    },
    created() {
      const specificMessage = this.messages[0]; // Replace 0 with the desired index
      console.log(specificMessage);
    },
    methods: {
         
      formSubmit (e) {
        e.preventDefault();
      
        axios.post('/students', {
          fname: this.fname,
          lname: this.lname,
          email: this.username,
          password: this.password,
          section: this.section
        })
          .then(function (response) {
          
          });
      },
      doTimeIN(e,firstname,lastname,section){
        let config =this;
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        var seconds = currentTime.getSeconds();
        
        // Convert to 12-hour format
        var ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12;
        hours = hours ? hours : 12; // Handle midnight (0 hours)
        
        var timeString = hours + ':' + this.addLeadingZero(minutes) + ':' + this.addLeadingZero(seconds) + ' ' + ampm;
        
        var userDetails = document.getElementById('userDetails');
        var userFirstname = userDetails.getAttribute('data-firstname');
        var userLastname = userDetails.getAttribute('data-lastname');
        var usersection = userDetails.getAttribute('data-section');
        
      axios.post('/timeInstudents', { 
         timein: timeString,
         fname: userFirstname,
         lname: userLastname,
         section: usersection

        }).then(function(r){
          r.data.message.forEach(function(v){
            config.Firstname = v.Firstname;
            config.Lastname = v.Lastname;
            config.id = v.id;
            config.timein = v.timeIn;

          })
          console.log(config.Firstname)
          const cont = document.getElementById("cont").style.display ="block";
           
           const native = document.getElementById("native");
           var text = document.createTextNode("You are successfully TimeIn :  @"+ config.timein);
           native.appendChild(text);
        });
     

      },
      addLeadingZero(number) {
        return number < 10 ? '0' + number : number;
      },
      dotimeOut(id){
        let request = this;
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        var seconds = currentTime.getSeconds();
        
        // Convert to 12-hour format
        var ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12;
        hours = hours ? hours : 12; // Handle midnight (0 hours)
        
        var timeString = hours + ':' + this.addLeadingZero(minutes) + ':' + this.addLeadingZero(seconds) + ' ' + ampm;
        axios.put('/timeOutstudents', { 
          timeOut: timeString,
          id: id,
        
         })
         .then(function(r){
          r.data.timeout.forEach(function(v){
            request.timeOut = v.timeOut;
          

          })
          const cont = document.getElementById("pont").style.display ="block";
           
           const native = document.getElementById("natives");
          var text = document.createTextNode("You are successfully Timeout @ : "+ request.timeOut);
          native.appendChild(text);
          
         })
        
          
      },
      addstudents(){
       
      
        axios.post('/create', { 
          fname: this.fname,
          lname: this.lname,
          section: this.sec,
          timein: this.timein,
          timeout: this.timeOut

 
         })
         .then(function(r){
          location.reload();
          console.log(r.data);
         })

      
      },
      editstudents(id){
        let self = this;
        axios.post('/edit', { 
           id: id,
        
 
         })
         .then(function(r){
        
          r.data.message.forEach(function(v){
              self.fname = v.Firstname;
              self.lname = v.Lastname;
              self.sec = v.Section;
              self.timein = v.timeIn
              self.timeOut = v.timeOut
              self.id = v.id;

          })
        
         })
         console.log(self.fname);
      },
      Showstudents(id){
        let self = this;
        axios.post('/display', { 
           id: id,
        
 
         })
         .then(function(r){
        
          r.data.message.forEach(function(v){
              self.fname = v.Firstname
              self.lname = v.Lastname
              self.sec = v.Section
              self.timeIn = v.timeIn
              self.timeout = v.timeOut
              self.id = v.id;

          })
        
         })
         console.log(self. datimeIN);
      },
      updatestudent(){
       let self  = this;
       axios.post('/update', { 
        id: self.id,
        fname: self.fname,
        lname: self.lname,
        section: self.sec,
        timein: self.timein,
        timeout: self.timeOut


       })
       .then(function(r){
    
        console.log(r.data);
       })

      },
      deletestudent(id){
        axios.post('/delete', { 
          id: id,
       

        })
        .then(function(r){
         location.reload();
          console.log(r.data);
         })
      },
      retrievestudents(id){
        axios.post('/retrieve', { 
          id: id,
       

        })
        .then(function(r){
        //  location.reload();
          console.log(r.data);
         })
      },
      permanentstudent(id){
        axios.post('/permanent', { 
          id: id,
       

        })
        .then(function(r){
        // location.reload();
          console.log(r.data);
         })
      },
      addaccount(){
        axios.post('/students', { 
          fname: this.fname,
          lname: this.lname,
          section: this.seksyon,
          email: this.user,
          password: this.pwd

 
         })
         .then(function(r){
        
          console.log(r.data);
         })
      },
      showaccount(id){
        let self = this;
        axios.post('/display', { 
           id: id,
        
 
         })
         .then(function(r){
        
          r.data.message.forEach(function(v){
              self.fname = v.firstname
              self.lname = v.lastname
              self.seksyon = v.section
              self.user = v.email
              self.pwd = v.password
              self.id = v.id;

          })
          console.log(r.data);
         })
        
      
      },
      deleteaccount(id){
        axios.post('/deletedaccount', { 
          id: id,
       

        })
        .then(function(r){
        // location.reload();
          console.log(r.data);
         })
      }


      
    }

})
app.mount('#app')
