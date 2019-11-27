class TextInput {

    protected $string;

    public function add($text)
    {
        $this->string .= $text;
    }

    public function getValue()
    {
        return $this->string;
    }
}

class NumericInput extends TextInput {

    public function add($text)
    {
        if (is_numeric($text)) {
            $this->string .=$text;
        }
    }
}

$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0');
echo $input->getValue();
