<!DOCTYPE html>

<head>

</head>

<body>

<style>
          
        body{
          background-color: white;
        }
        .para{
          color: black;
          ;
          margin: auto;
        }
        .para1{
            background-color: #DA9DFA;
            padding: 100px
        }
      </style>

    <table>

    
    <tr> 
    <td class=para1 ></td>
    
    <td   class=para >    
        <h2 style="color: red;">Student Registration Information</h2>
        <hr color="red">

         <br>
        First name<br>
        <input type="text"size="50"><br><br>
        Last name <br>
        <input type="text"size="50"><br><br>
        student ID<br>
        <input type="text" size="50"><br><br>
        
        Program/Major <br>
              <select name="sub" id="sub" rows="4" cols="50">
                <option value="CS"size="50">BSC in CSE</option>
                <option value="BBA"size="50">BSC in BBA</option>
                <option value="EEE"size="50">BSC in EEE</option>
                <option value="LAW"size="50">BSC in LAW</option>
              </select>
        <br><br>
            Departement <br>
              <select name="Select Departement" placeholder="Select Departement">
                <option value="science">dept of Science</option>
                <option value="BBA">dept of Arts and Social Sciences</option>
                <option value="EEE">dept OF Business </option>
                <option value="LAW">dept of Pharmacy</option>
              </select>
        <br><br>

        phone <br>
        <input type="number"size="50"><br><br>

        Univesity Email<br>
        <input type="text"size="50"><br><br>

        Create Password (at least 8 characters)<br>
        <input type="Password" minlength="8" name="pass1"size="50"><br><br>

        Confirm Password <br>
        <input type="Password" minlength="8" name="pass1"size="50"><br><br><br>


        <table>
        <tr> Smester Selection</tr>
        <tr>
          <td> <input type="radio"name="ab">Summer 2024</td>
          <td> <input type="radio" name="ab"> Fall 2024 </td>
          <td> <input type="radio" name="ab"> Spring 2024 </td>
          <td> <input type="radio" name="ab"> Other/Special Term </td>
        </tr>
      </table><br><br>

      Requested Credit Load (Max 15) <br>
        <input type="number" placeholder="e.g., 9 to 12"><br><br>

        <input type="checkbox"> i require academic advising before final Registration


        <h2 style="color: red;">Course Selection</h2>
        <hr color="red"><br>

        <table>

        <tr>
            <td>
                <input type="checkbox"> MATH 1201 (Calculas 1)  </td>
            <td>
                <input type="checkbox"> CS 2105 (Data Structure)  </td>
                <td>
                <input type="checkbox"> ECON 1001 (Microeco)  </td>
        
        </tr>
        <tr>
        <td>
                <input type="checkbox"> PHY 1102 (Physics Lab)  </td>

                </tr>

        </table><br>

        
        Comments / Special Requests<br>
        <textarea rows="4" cols="50"></textarea>
    <td class=para1 ></td>
    </table>
    <center>
    <button type="button" style="background-color: #FF5F5F; color: white;">Submit</button>
    </center>



</body>
</html>

