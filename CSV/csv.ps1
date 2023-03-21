$content = Get-Content -Path "C:\Users\Andre.Henrici\Desktop\CSV.CSV"
$content = $content -replace ';', ','
Set-Content -Path "C:\Users\Andre.Henrici\Desktop\csv_k.CSV" -Value $content
