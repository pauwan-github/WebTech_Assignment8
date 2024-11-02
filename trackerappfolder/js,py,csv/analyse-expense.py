import pandas as pd

def analyze_expenses(file_path):
    # Read expenses data from a CSV file
    expenses = pd.read_csv(file_path)
    
    # Perform analysis
    total_expenses = expenses['amount'].sum()
    average_expense = expenses['amount'].mean()
    expense_summary = expenses.groupby('expense_name')['amount'].sum()
    
    # Print the analysis results
    print(f"Total Expenses: ${total_expenses}")
    print(f"Average Expense: ${average_expense:.2f}")
    print("Expense Summary by Category:")
    print(expense_summary)

# Example usage
if __name__ == "__main__":
    analyze_expenses('expenses.csv')
