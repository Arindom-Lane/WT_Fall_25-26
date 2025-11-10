<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .p{
            
            background-color: Tomato;
            width: 500px;
            height: 50vmax; /* 100vmax meaning full window coverage, 50vmax for half */
            border: 22px solid deepskyblue;
            padding: 30px;
            margin: 50px
            /* margin: 0 auto; auto center the content  */
        }
        .p1{
            
            background-color: Tomato;
            width: 590px;
            height: 50px; /* 100vmax meaning full window coverage, 50vmax for half */
            
        }
        .body{
            background-color: DodgerBlue;
            color: white;
        }


    </style>

</head>
<body class="body">
<p>
This paragraph
contains a lot of lines
in the source code,
but the browser
ignores it.
</p>
<hr>
<p>
This paragraph
contains         a lot of spaces
in the source         code,
but the        browser
ignores it.
</p>

<p>
  My Bonnie lies over the ocean.

  My Bonnie lies over the sea.

  My Bonnie lies over the ocean.

  Oh, bring back my Bonnie to me.
</p>

<h2>9/11/2025</h2>
<p>I want to learn html and css if i can at least this is what i thinki can do as long as i dont procrastinate</p>
<a href="https://www.aiub.edu/">aiub</a>

<tagname>Content goes here...</tagname>
<center>
<div class="p" alt="Girl with a jacket"></div></center>
<center>
<div class="p1"></div>
</center>

<h1>HTML Text Formatting Examples</h1>

    <p>
        <b>&lt;b&gt;:</b> This tag just makes text <b>bold</b>. 
        It doesn't imply extra importance.
    </p>
    <p>
        <b>&lt;strong&gt;:</b> This tag makes text <strong>important</strong>, 
        which browsers usually render as bold. Use this to indicate 
        seriousness or urgency.
    </p>

    <p>
        <b>&lt;i&gt;:</b> This tag makes text <i>italic</i>. 
        It's often used for technical terms, foreign words, or thoughts.
    </p>
    <p>
        <b>&lt;em&gt;:</b> This tag <em>emphasizes</em> text. 
        Browsers usually render this as italic. Use it to stress a word.
    </p>

    <p>
        <b>&lt;mark&gt;:</b> This tag <mark>marks or highlights</mark> text, 
        like using a highlighter pen.
    </p>

    <p>
        <b>&lt;small&gt;:</b> This tag makes text <small>smaller</small>, 
        often used for side comments or copyright information.
    </p>

    <p>
        <b>&lt;del&gt; and &lt;ins&gt;:</b> These are often used together 
        to show edits. <br>
        Example: The price is <del>$20.00</del> <ins>$15.00</ins>.
    </p>

    <p>
        <b>&lt;sub&gt;:</b> This creates subscript text, which hangs lower. <br>
        Example: The chemical formula for water is H<sub>2</sub>O.
    </sP>

    <p>
        <b>&lt;sup&gt;:</b> This creates superscript text, which is higher. <br>
        Example: The equation for the Pythagorean theorem is a<sup>2</sup> 
        + b<sup>2</sup> = c<sup>2</sup>.
    </p>


<center>
<h1 style="background-color:DodgerBlue;color: white;">Hello World</h1>
<p style="background-color:Tomato; color: white;">Lorem ipsum...</p>
</center>


</body>


</html> -->

<!-- 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>

<h1 > Learning JS</h1>
<h2> this is our class</h2>
    <script>
        var name = "arindom";
        let number = 1234;
        var name_2 = "Paul"
        const last_name = "HObe";


        document.write("Hello WT_O D") //
        console.log("Hello WT_O C")
        alert("Hello WT_O A")



        // var body = document.gerElementById("demo"); //it is for DOM, class name er moto, id name tag e bosiye access kora jay
        // body.innerHTML = "GOod boy"



        console.log(typeof name);
        console.log(typeof number);
        console.log(typeof name_2);
        console.log(typeof last_name);
        console.log(typeof undefined);


        
        

        
        



    </script>

    <input type="text" id="myInput" placeholder="Enter text here">
        <button onclick="processInput()">Submit</button>

        <p id="output"></p>

        <script>
            
        function processInput() {
            // 1. Get the input element by its ID
            const inputElement = document.getElementById('myInput');

            // 2. Read the value from the input
            const inputValue = inputElement.value;

            // 3. Use the value (Example: Display it in a paragraph)
            const outputElement = document.getElementById('output');
            outputElement.textContent = 'You entered: ' + inputValue;

        }
        processInput()
        
        </script>

    <input type="text" name="input">
</body>
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>
        .p{
            border: 2px solid powderblue;
            padding: 30px;

        }



    </style>

    <center class="p"><h1>Trying out border</h1></center>



    
</body>
</html>