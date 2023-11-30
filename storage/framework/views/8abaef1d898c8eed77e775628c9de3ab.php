<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>firstLaravelProject</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14pt;
            background-color: #F8F8FF;
            color: #2F4F4F;
        }
        header {
            padding: 10px;
            text-align: center; 
        }
        ul {
            list-style-type: none;
            
            display: flex; 
            flex-direction: row;
            justify-content: center;
        }

        .menu a {
            text-decoration: none; 
            margin: 0 10px; 
            color: #2F4F4F;
            font-size: 16pt;
        }

        .menu a:hover {
            color: #FF4500; 
        }

    
        footer {
            padding: 10px; 
            text-align: center; 
        }
        
        .form{
            margin: 20px;
            padding-bottom: 16px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ADD8E6;
        }

        th {
            background-color: #ADD8E6;
            font-weight: bold;
            padding: 10px;
        }
        
        button {
            background-color: #2F4F4F;
            color: #F8F8FF;
            border: 0px;
            border-radius: 10px;
            width: 90px;
            height: 30px;
        }
        
        button:active {
            background-color: #FF4500;
        }
</style>
</head>
<body>
    <header>
        <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>
</body>
</html>
<?php /**PATH /home/user/firstLaravelProject/resources/views/layouts/app.blade.php ENDPATH**/ ?>