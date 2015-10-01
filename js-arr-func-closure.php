<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">        
    </head>
    <body>
    </body>
    <script type="text/javascript">
        //---------------------------------closure
        var pet = function(name) {          // The outer function defines a variable called "name"
            var getName = function() {
                return name;                // The inner function has access to the "name" variable of the outer function
            }
            return getName;               // Return the inner function, thereby exposing it to outer scopes
        };
        var myPet = pet("Vivie");

        myPet();                            // Returns "Vivie"

        //---------------------------------arguments
        function bobConcat(glue) {
            var res = '';
            var i = 1; //0=glue, 1=word, 2=word, 3=word...
            for (i = 1; i < arguments.length; i++) {
                res += arguments[i] + glue;
            }
            return res;
        }

        var t = bobConcat('_,_', 'bob', 'anna', 'lusi', 'fedya');
        //console.log(t);

        var testSequence = ['1', 1, -1, 'bob', NaN, 'NaN', false, 'false', 0, '0', Number.NEGATIVE_INFINITY, Number.POSITIVE_INFINITY, '', (99 / 0)];

        //-----------------isFinite
        var res = '';
        testSequence.forEach(function(item, index) {
            res += 'isFinite(' + typeof item + '__' + item + ') = ' + isFinite(item) + '\r\n';
        });
        //console.log(res);

        //--------------------isNaN
        var res = '';
        for (var item in testSequence) {
            if (!testSequence.hasOwnProperty(item)) {
                continue;
            }
            res += 'isNan(' + typeof item + '__' + item + ') = ' + isNaN(item) + '\r\n';
        }
        console.log(res);


        var u = 'https://developer.mozilla.org/РУССКИЙ/docs';
        console.log(encodeURI(u));
        console.log(encodeURIComponent(u));
        
    </script>
</html>