<?php
class MenuController extends Base\ApiController
{
    public function getAction()
    {
        $data = $this->model->get();
        foreach ($data as &$v) {
            $v['parent'] = $this->model->getData('hp_'.APP_NAME.'_menu_lang', (int) $v['parent'])['name'] ?? '';
            $v['status'] = l('status.'.$v['status']);
        }
        return $this->send($data);
    }
}