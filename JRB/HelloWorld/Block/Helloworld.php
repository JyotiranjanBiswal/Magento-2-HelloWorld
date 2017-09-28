<?php
namespace JRB\Helloworld\Block;
 
class Helloworld extends \Magento\Framework\View\Element\Template
{
    public function getHelloWorldTxt()
    {
        return 'My first modules with "hello world"';
    }
}