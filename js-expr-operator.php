<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    </body>
    <script type="text/javascript">// Arrays
        var trees = ["redwood", "bay", "cedar", "oak", "maple"];
        0 in trees;        // returns true
        3 in trees;        // returns true
        6 in trees;        // returns false
        "bay" in trees;    // returns false (you must specify the index number,
        // not the value at that index)
        "length" in trees; // returns true (length is an Array property)

// built-in objects
        "PI" in Math;          // returns true
        var myString = new String("coral");
        "length" in myString;  // returns true

// Custom objects
        var mycar = {make: "Honda", model: "Accord", year: 1998};
        "make" in mycar;  // returns true
        "model" in mycar; // returns true


        var theDay = new Date(1995, 12, 17);
        console.log(typeof theDay);
        if (theDay instanceof Date) {

        }


        //Comprehensions [for (i of [ 1, 2, 3 ]) i*i ]; // [ 1, 4, 9 ]

        var parts = ['shoulder', 'knees'];
        var lyrics = ['head', ...parts, 'and', 'toes'];


    </script>
</html>
