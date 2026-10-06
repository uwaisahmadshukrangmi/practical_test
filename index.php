<html>

<head>
    <title>Calculate Electricity Bill</title>
</head>

<body>
    <h1>Calculate House Electricity Bill</h1>

    <div style="margin-bottom: 50px;">
        <table border="1" cellpadding="10">
            <tr>
                <th>Black Tariff</th>
                <th>Unit</th>
                <th>Rate</th>
            </tr>
            <tr>
                <td>For the first 200 kws (1-200)</td>
                <td>sen/kWh</td>
                <td>0.218</td>
            </tr>
            <tr>
                <td>For the next 100 kWh (201–300 kWh)</td>
                <td>sen/kWh</td>
                <td>0.344</td>
            </tr>
            <tr>
                <td>For the next 300 kWh (301–600 kWh)</td>
                <td>sen/kWh</td>
                <td>0.516</td>
            </tr>
            <tr>
                <td>For the next 300 kWh (601–900 kWh)</td>
                <td>sen/kWh</td>
                <td>0.546</td>
            </tr>
            <tr>
                <td>For the next kWh (901 kWh onwards)</td>
                <td>sen/kWh</td>
                <td>0.571</td>
            </tr>
            <td colspan="3" style="text-align: center;"><strong>Block Tariff (per month)</strong>
            </td>
        </table>
    </div>

    <form method="POST">
        Enter your first 200 kWh (1–200 kWh) per month :
        <input type="text" name="block1" value="block1" />
        <br>
        Enter next 100 kWh (201–300 kWh) per month :
        <input type="text" name="block2" value="block1" />
        <br>
        Enter next 300 kWh (301–600 kWh) per month :
        <input type="text" name="block3" value="block1" />
        <br>
        Enter next 300 kWh (601–900 kWh) per month :
        <input type="text" name="block4" value="block1" />
        <br>
        Enter next kWh (901 kWh onwards) per month :
        <input type="text" name="block5" value="block1" />
        <br>

        <input type="submit" name="calculate" value="Calculate Bill" />
        <input type="submit" name="reset" value="Reset" />


    </form>


</body>

</html>