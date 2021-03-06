<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title><?=$meta_title?></title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>

<div onclick="toggle(hidden_content)">

    <div class="question"><?=\app\model\M_Helper::Instance()->htmlHandler($card['card_question'])?></div>

    <div class="answer">
        <div class="answer" id="hidden_content" style="display: none;"> <hr>
            <?=\app\model\M_Helper::Instance()->htmlHandler($card['card_answer'])?>
        </div>
    </div>

<script>
    function toggle(el) {
        el.style.display = '';
    }
</script>


<div class="buttons_answers">
    <form action="/?page=response" method="post">

        <input type="hidden" name="card_id" value="<?=$card['card_id']?>">

        <button class="button_answer" type="submit" name="response_result" value="bad">
            ПЛОХО
        </button>
		
		<button class="button_answer" type="submit" name="response_result" value="good">
            ХОРОШО
        </button>

    </form>


    <div class='menu'>

        <a href="/">ГЛАВНАЯ</a> |

        <a onclick='return confirm("Вы уверены, что хотите пометить вопрос?")' href="/?page=mark/<?=$question['question_id']?>/<?=$token?>">
            ОТМЕТИТЬ
        </a> |

        <a onclick='return confirm("Вы уверены, что хотите исключить вопрос из теста навсегда?")' href="/exclude/<?=$question['question_id']?>/<?=$token?>">
            ИСКЛЮЧИТЬ
        </a> |

        <?=$count_repiat?>

    </div>

</div>


</div>
</body>
</html>