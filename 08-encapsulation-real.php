<?php

/**
 * CONTOH REAL: SISTEM BANK SEDERHANA
 * Encapsulation untuk melindungi data sensitif
 */

class BankAccount
{
    // ❌ PRIVATE - Data sensitif, tidak boleh diubah langsung dari luar
    private $accountNumber;
    private $balance;
    private $pin;

    // ✅ PUBLIC - Constructor untuk inisialisasi
    public function __construct($accountNumber, $initialBalance, $pin)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
        $this->pin = $pin;
    }

    // ✅ PUBLIC - Interface untuk nasabah
    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
            $this->logTransaction("DEPOSIT", $amount);
            return "Deposit Rp" . number_format($amount, 0, ',', '.') . " berhasil!";
        }
        return "Jumlah tidak valid!";
    }

    // ✅ PUBLIC - Interface untuk nasabah dengan verifikasi
    public function withdraw($amount, $pin)
    {
        // Cek PIN dulu (private method)
        if (!$this->verifyPin($pin)) {
            return "❌ PIN salah! Withdraw dibatalkan.";
        }

        if ($amount > $this->balance) {
            return "❌ Saldo tidak cukup!";
        }

        if ($amount > 0) {
            $this->balance -= $amount;
            $this->logTransaction("WITHDRAW", $amount);
            return "Withdraw Rp" . number_format($amount, 0, ',', '.') . " berhasil!";
        }
        return "Jumlah tidak valid!";
    }

    // ✅ PUBLIC - Cek saldo (read-only)
    public function checkBalance()
    {
        return "Saldo Anda: Rp" . number_format($this->balance, 0, ',', '.');
    }

    // 🔒 PRIVATE - Verifikasi PIN (hidden dari luar)
    private function verifyPin($enteredPin)
    {
        return $enteredPin === $this->pin;
    }

    // 🔒 PRIVATE - Logging transaksi (internal tracking)
    private function logTransaction($type, $amount)
    {
        echo "📝 Log: Transaksi $type Rp" . number_format($amount, 0, ',', '.') . " tercatat.\n";
    }

    // 🔒 PRIVATE - Validasi internal (hanya untuk class ini)
    private function validateAmount($amount)
    {
        return is_numeric($amount) && $amount > 0;
    }
}

// ========== PENGGUNAAN ==========
echo "=== SISTEM BANK ===\n\n";

$account = new BankAccount("1234567890", 1000000, "1234");

// ✅ BISA - Public method
echo $account->checkBalance() . "\n";
echo $account->deposit(500000) . "\n";
echo $account->checkBalance() . "\n";
echo $account->withdraw(200000, "1234") . "\n";
echo $account->checkBalance() . "\n\n";

// ❌ TIDAK BISA - Private property
// echo $account->balance;              // ERROR!
// echo $account->pin;                  // ERROR!
// $account->balance = 999999999;       // ERROR! Tidak bisa curangi saldo

// ❌ TIDAK BISA - Private method
// $account->logTransaction("HACK", 1000000);  // ERROR!
// $account->verifyPin("1234");                // ERROR!

echo "===========================\n";
echo "Coba PIN salah:\n";
echo $account->withdraw(100000, "0000") . "\n";
