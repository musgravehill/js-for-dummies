<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <img id="photo" />
    </body>
    <script type="text/javascript">
        //------------------------------------------HTMLCanvasElement.toDataURL()------------------
        var img = new Image();
        img.onload = function() {
            var canvas = document.createElement("canvas");
            canvas.width = this.width;
            canvas.height = this.height;

            var ctx = canvas.getContext("2d");
            ctx.drawImage(this, 0, 0);

            var dataURL = canvas.toDataURL('image/png'); //get Data URI
            var dataRaw = canvas.toDataURL('image/png').replace(/^data:image\/(png|jpg);base64,/, ''); // Get raw image data
        };
        img.src = 'http://sd.tt.dev/photoUsers/2.jpg'; // 'http://www.starnostar.com/data/images2/who-is-jessyka-swan-is-star-or-no-star-jessyka-swan-celebrity-vote.jpg';
        document.body.appendChild(img);



        //------data URIs, defined by RFC 2397, allow content creators to embed small files inline in documents.----
        //data:[<mediatype>][;base64],<data>



        var xhr = new XMLHttpRequest();
        xhr.open("GET", "http://sd.tt.dev/photoUsers/2.jpg", true);
        xhr.responseType = "arraybuffer"; //"", arraybuffer, blob, document, json, text
        /*The ArrayBuffer object is used to represent a generic, fixed-length raw binary data buffer.
         * You can not directly manipulate the contents of an ArrayBuffer;
         * instead, you create one of the typed array objects or a DataView object
         * which represents the buffer in a specific format, and use that to read and write the contents of the buffer.*/
        xhr.onload = function(e) {
            var arrayBuffer = this.response;
            var arrayBuffer_Array = new Uint8Array(arrayBuffer); //ArrayBuffer => Array object            
            /*DataView view provides a low-level interface for reading data from and writing it to an ArrayBuffer.*/
            var arrayBuffer_DataView = new DataView(arrayBuffer);//ArrayBuffer => DataView object

            var blob = new Blob([arrayBuffer_Array]);
            var URL = window.URL || window.webkitURL;
            var imageUrl = URL.createObjectURL(blob); //createObjectURL(), который принимает ссылку на файл и возвращает объект URL
            var img = document.querySelector("#photo"); //Возвращает первый элемент внутри документа
            //var img = document.getElementById("#photo");
            img.src = imageUrl;
        };
        xhr.send();


    </script>
</html>
