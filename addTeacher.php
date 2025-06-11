<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="design.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Добавление данных преподавателя</title>
    </head>
    <body>
        <div>
            <form action="controller\addTeacherController.php" method="POST" role='form'>
                <div>
                    <div>
                        <label for="passport_data">ФИО</label>
                        <div>
                            <input id="passport_data" type="text" name="passport_data"/>
                        </div>
                    </div>
                    <div>
                        <label for="start_date">Начальная дата работы</label>
                        <div>
                            <input id="start_date" type="date" name="start_date"/>
                        </div>
                    </div>
                    <div>
                        <label for="date_of_employment">Дата поступления</label>
                        <div>
                            <input id="date_of_employment" type="date" name="date_of_employment"/>
                        </div>
                    </div>
                    <button type="submit" name="add">Добавить</button>
                </div>
            </form>
        </div>
    </body>
</html>