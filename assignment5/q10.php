<?php
    interface CustomException{
        function getError();
    }
    class BalanceException extends Exception implements CustomException{
        function getError() {
            return $this->getMessage();
        }
    }
    
    class ExpDateException extends Exception implements CustomException {
        function getError(){
            return $this->getMessage();
        }
    }
    class MyLengthException extends Exception implements CustomException {
        function getError(){
            return $this->getMessage();
        }
    }
    
    $card_number="123456789123457"; 
    $card_exp_date="12/31/22"; 
    $account_balance=1000;
    $transaction_amount=5000; 
    $today = date("m/d/y");
    try{
        if(strlen($card_number)<16)
        {
            throw new MyLengthException("Card number is less than 26");
        }
        else if(strtotime($today) > strtotime($card_exp_date)){
            throw new ExpDateException("Card has expired");
        }
        else if ($account_balance < $transaction_amount){
            throw new BalanceException("Insufficient Balance");
        }
        $account_balance=$account_balance-$transaction_amount;
        echo "Transaction Successfull. Balance is $account_balance";
    }
    catch(MyLengthException $le){
        echo $le->getError();
    }
    catch(ExpDateException $ede){
        echo $ede->getError();
    }
    catch(BalanceException $be){
        echo $be->getError();
    }
    catch (Exception $e){
        echo $e->getMessage();
    }
?>