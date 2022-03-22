async function Require(functionName, params = []) {
    let data = {};
    await fetch("http://localhost/StormStore/databaseFunctions.php", {
        method: "post",
        body: JSON.stringify({
            functionName: functionName,
            params: params
        })
    })
    .then(async res => await res.json())
    .then(async json => await Object.entries(json))
    .then(entries => data = entries)
    .catch(err => alert(err))
    return data;
}