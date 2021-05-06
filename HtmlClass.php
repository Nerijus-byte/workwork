<?php

class FormClass
{
    public function open($a, $b)
    {
        return '<form action="' . $a . '" method="' . $b . '">';
    }

    public function label($a)
    {
        return '<label class="custom-file-label">' . $a . '</label><br>';
    }

    public function input($type, $placeholder, $value)
    {
        return '<input placeholder="' . $placeholder . '" type="' . $type . '" value="' . $value . '"><br>';
    }

    public function password($a)
    {
        return '<input type="password" value="' . $a . '"><br>';
    }

    public function submit($a)
    {
        return '<button type="submit">' . $a . '</button><br>';
    }

    public function textarea($a)
    {
        return '<textarea placeholder="' . $a . '"></textarea><br>';
    }

    public function close()
    {
        return '</form>';
    }

    public function select($b)
    {
        return '<select class="form-control" name="' . $b . '"> <option <?php echo ($edit_row["workPlace"] === "Work Place 1")?"selected" : ""; ?> >Work Place 1</option> </select><br>';
    }
}
class Measure extends FormClass {

    public function meter($id, $min, $max, $value, $a)
    {
        return '<label class="custom-file-label">' . $a . '</label>  <meter id="' . $id . '" min="' . $min . '" max="' . $max . '" value="' . $value . '"><br>';
    }
}
class Quotations extends FormClass {

    public function quotation($url)
    {
        return '<q cite="' . $url . '"><br>';
    }
}

$measurer = new Measure;
$quotation_mark = new Quotations;

$form = new FormClass;
echo $form->open('index.php', 'POST');
echo $form->label('text');
echo $form->input('text', 'Enter value', '');
echo $form->input('password', 'Enter password', '');
echo $form->password('Enter password');
echo $form->textarea('Enter text');
echo $form->submit('go');
echo $measurer->meter('Gas', '0', '100', 60, 'Meter');
echo $quotation_mark->quotation('http://en.wikipedia.org/wiki/Totalitarianism');
echo $form->close();
echo $form->select('cats');
