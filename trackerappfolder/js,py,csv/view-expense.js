document.addEventListener("DOMContentLoaded", function() {
    fetch('get_expense_details.php')
    .then(response => response.json())
    .then(data => {
        const expenseDetails = document.getElementById('expense-details');
        expenseDetails.innerHTML = `
            <h2>Expense Details</h2>
            <p>Expense Name: ${data.expense_name}</p>
            <p>Amount: $${data.amount}</p>
        `;
    })
    .catch(error => console.error('Error fetching expense details:', error));
});
