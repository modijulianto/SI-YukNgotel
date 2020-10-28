<?php

function is_loggin()
{
    if (session()->get('email') == null) {
        return redirect()->to('/Auth');
    }
}
