<?php

namespace App\Mail;

use App\Models\Customer;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SodastoreInvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    public $customer, $invoice;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Customer $customer, Transaction $invoice)
    {
        $this->invoice = $invoice;
        $this->customer = $customer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail/InvoiceMail');
    }
}
