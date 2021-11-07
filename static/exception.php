<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>error</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ahmetbarut.net/assets/prism.css">
    <link rel="stylesheet" href="https://prismjs.com/plugins/line-highlight/prism-line-highlight.css">
    <link rel="stylesheet" href="https://prismjs.com/plugins/line-numbers/prism-line-numbers.css" data-noprefix="">
    <style>
        pre[class*="language-"].line-numbers {
            position: relative;
            padding-left: 3.8em;
            counter-reset: linenumber;
        }

        pre[class*="language-"].line-numbers>code {
            position: relative;
            white-space: inherit;
        }

        .line-numbers .line-numbers-rows {
            position: absolute;
            pointer-events: none;
            top: 0;
            font-size: 100%;
            left: -3.8em;
            width: 3em;
            /* works for line-numbers below 1000 lines */
            letter-spacing: -1px;
            border-right: 1px solid #999;

            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;

        }

        .line-numbers-rows>span {
            display: block;
            counter-increment: linenumber;
        }

        .line-numbers-rows>span:before {
            content: counter(linenumber);
            color: #999;
            display: block;
            padding-right: 0.8em;
            text-align: right;
        }
    </style>
</head>

<body class="line-numbers">
    <div class="container">
        <div class="d-flex align-items-center flex-column p-2" style="width: 100%;height: 20vh;">
            <div class="col-12 p-5 border" style="position: relative;">
                <span class="file-line" style="position: absolute;
                top: 0;
                padding: 2px;
                background-color: #dfd9d957;
                margin: 0px;
                width: auto;"><span><a style="text-decoration: none;" href="#<?=$file?>"><?=$file?></a></span>:<code><?=$line?></code></span>
                <div style="position: absolute;
                top: 40px;
                z-index: 99;">Message : <?=$message?> <br>Line: <?=$line?></div>
                
                
            </div>
            <div class="col-12">
                <div class="d-flex flex-row">
        
                    <div class="col-12">
<pre class="language-php" data-line="<?=$line-1?>" data-line-offset="<?=$line-3?>" style="max-height: 450px;">
<code class="language-php">
<?=$content?>
</code>
</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ahmetbarut.net/assets/prism.js"></script>
    <script src="https://prismjs.com/plugins/line-highlight/prism-line-highlight.js"></script>
    <script>
    </script>
</body>

</html>