const mainNetworkId = 5777;
const address   = "0x48Cb205D87D2053Cc05A357e8F93666AD79Ef824";
const abi       = [
    {
        "inputs": [
            {
                "internalType": "address",
                "name": "newOwner",
                "type": "address"
            }
        ],
        "name": "changeOwner",
        "outputs": [],
        "stateMutability": "nonpayable",
        "type": "function"
    },
    {
        "inputs": [
            {
                "internalType": "uint256[]",
                "name": "courseNumber",
                "type": "uint256[]"
            },
            {
                "internalType": "uint256[]",
                "name": "sectionNumber",
                "type": "uint256[]"
            },
            {
                "internalType": "uint256[]",
                "name": "instructorID",
                "type": "uint256[]"
            },
            {
                "internalType": "uint256[]",
                "name": "studentNumber",
                "type": "uint256[]"
            },
            {
                "internalType": "uint256[]",
                "name": "finalGrade",
                "type": "uint256[]"
            }
        ],
        "name": "setGrade",
        "outputs": [],
        "stateMutability": "nonpayable",
        "type": "function"
    },
    {
        "inputs": [],
        "stateMutability": "nonpayable",
        "type": "constructor"
    },
    {
        "inputs": [],
        "name": "getOwner",
        "outputs": [
            {
                "internalType": "address",
                "name": "",
                "type": "address"
            }
        ],
        "stateMutability": "view",
        "type": "function"
    }
];
function success(message) {
    $('#log').append(
        $('<div>').addClass('alert alert-success').text(message)
    );
}
function danger(message) {
    $('#log').append(
        $('<div>').addClass('alert alert-danger').text(message)
    );
}

if (typeof(web3) === "undefined") {
    danger("Please download a decentralized portal so you can add a block to the chain");
} else {
    //
    document.querySelector('.enableEthereumButton').addEventListener('click', () => {
        ethereum.request({ method: 'eth_requestAccounts' });
    });
    //
    web3 = new Web3(web3.currentProvider);
    web3.eth.net.getId((error, networkId) => {
        if (networkId !== mainNetworkId) {
            danger("You are connecting to a network id is not recognized. Please change the network id to "+mainNetworkId);
        }
    });
}








function Jordan(Student,Grade,Course,Section,Instructor){
    $(function () {
        const contract  = new web3.eth.Contract(abi, address);
        contract.methods.setGrade(
            [98764512,98764512,98764512,98764512],
            [3,3,3,3],
            [3,3,3,3],
            [3170605216,3190606073,3190601023,3190606051],
            [90,90,90,90]
        ).send({from: '0x09A495394Bb69D41Ee59375e99EF312c8dE24EBf' })
            .then(function(receipt) {
                success("The block has been added to the chain successfully");
            })
            .catch(function(error) {
                danger('تصبحو على خير شباب');
            });
    });
}