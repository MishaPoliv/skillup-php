<?php
require_once 'Tag.php';

class TagUl extends Tag
{

    /**
     * @var Tag[]
     */
    private $items;

    public function __construct()
    {
        parent::__construct('ul');
    }

    public function addItem($text)
    {
        $item = new Tag('li');
        $item->setText($text);
        $this->items[] = $item;

        return $this;
    }

    public function show()
    {
        $itemsHtml = '';

        foreach ($this->items as $item) {
            $itemsHtml .= $item->show();

        }

        $this->setText($itemsHtml);

        return parent::show();
    }

}