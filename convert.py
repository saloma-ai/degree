import csv
import json

csv_file = '../degree.csv'
json_file = 'database.json'

data = {}
with open(csv_file, 'r', encoding='utf-8') as f:
    reader = csv.reader(f)
    next(reader)  # Skip header
    for row in reader:
        id_ = row[0].strip()
        degree = row[1].strip() if row[1].strip() else 'N/A'
        data[id_] = degree

with open(json_file, 'w') as f:
    json.dump(data, f, indent=4)

print("Database updated successfully.")
