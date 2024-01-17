
function chunkArrayInGroups(arr,size){
    let newArr = []
    for(let i=0;i<arr.length;i+=size){
        
        newArr.push(arr.slice(i,i+size))

    }
    return newArr
}



console.log(chunkArrayInGroups([0, 1, 2, 3, 4, 5, 6, 7, 8], 4))

