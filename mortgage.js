function calculateMortgage() {
    let loanAmount = Number(document.getElementById("loanAmount").value);
    let interestRate = Number(document.getElementById("interestRate").value);
    let loanTerm = Number(document.getElementById("loanTerm").value);

    if (loanAmount <= 0 || interestRate <= 0 || loanTerm <= 0) {
        document.getElementById("mortgageResult").innerHTML =
            "Please enter valid numbers for all fields.";
        return;
    }

    let monthlyRate = interestRate / 100 / 12;
    let numberOfPayments = loanTerm * 12;

    let monthlyPayment =
        loanAmount *
        (monthlyRate * Math.pow(1 + monthlyRate, numberOfPayments)) /
        (Math.pow(1 + monthlyRate, numberOfPayments) - 1);

    let totalPaid = monthlyPayment * numberOfPayments;
    let totalInterest = totalPaid - loanAmount;

    document.getElementById("mortgageResult").innerHTML =
        "<strong>Estimated Monthly Payment: $" + monthlyPayment.toFixed(2) + "</strong><br>" +
        "Total Paid Over Loan: $" + totalPaid.toFixed(2) + "<br>" +
        "Total Interest Paid: $" + totalInterest.toFixed(2);
}