if (typeof window.ethereum !== 'undefined') {
    console.log('MetaMask is installed!');
    const ethereumButton = document.querySelector('.enableEthereumButton');
    ethereumButton.addEventListener('click', () => {
        ethereum.request({ method: 'eth_requestAccounts' });
    });
}else{
    document.getElementById("installMetamask").style.display = "block";
}





function log(message) {
    $('#log').append($('<p>').text(message));
    $('#log').scrollTop($('#log').prop('scrollHeight'));
}

    function error(message) {
    $('#log').append($('<p>').addClass('dark-red').text(message));
    $('#log').scrollTop($('#log').prop('scrollHeight'));
}

    function waitForReceipt(hash, cb) {
    web3.eth.getTransactionReceipt(hash, function (err, receipt) {
        if (err) {
            error(err);
        }

        if (receipt !== null) {
            // Transaction went through
            if (cb) {
                cb(receipt);
            }
        } else {
            // Try again in 1 second
            window.setTimeout(function () {
                waitForReceipt(hash, cb);
            }, 1000);
        }
    });
}

    var address = "0xE9038a7560d32b29a87C93d42f4Cf1F46DacAc3B";
    var abi = [
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
                    "internalType": "uint256",
                    "name": "courseNumber",
                    "type": "uint256"
                },
                {
                    "internalType": "uint256",
                    "name": "sectionNumber",
                    "type": "uint256"
                },
                {
                    "internalType": "uint256",
                    "name": "instructorID",
                    "type": "uint256"
                },
                {
                    "internalType": "uint256",
                    "name": "studentNumber",
                    "type": "uint256"
                },
                {
                    "internalType": "uint256",
                    "name": "finalGrade",
                    "type": "uint256"
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
            "inputs": [
                {
                    "internalType": "uint256",
                    "name": "courseNumber",
                    "type": "uint256"
                },
                {
                    "internalType": "uint256",
                    "name": "studentNumber",
                    "type": "uint256"
                }
            ],
            "name": "getGrade",
            "outputs": [
                {
                    "components": [
                        {
                            "internalType": "uint256",
                            "name": "courseNumber",
                            "type": "uint256"
                        },
                        {
                            "internalType": "uint256",
                            "name": "sectionNumber",
                            "type": "uint256"
                        },
                        {
                            "internalType": "uint256",
                            "name": "instructorID",
                            "type": "uint256"
                        },
                        {
                            "internalType": "uint256",
                            "name": "studentNumber",
                            "type": "uint256"
                        },
                        {
                            "internalType": "uint256",
                            "name": "finalGrade",
                            "type": "uint256"
                        }
                    ],
                    "internalType": "struct Student.newGrade[]",
                    "name": "",
                    "type": "tuple[]"
                }
            ],
            "stateMutability": "view",
            "type": "function"
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
        },
        {
            "inputs": [],
            "name": "gradesCount",
            "outputs": [
                {
                    "internalType": "uint256",
                    "name": "",
                    "type": "uint256"
                }
            ],
            "stateMutability": "view",
            "type": "function"
        }
    ];

    $(function () {
        const contract = new web3.eth.Contract(abi, address);

// Now you can call the getSection function using the contract instance
        contract.methods.setGrade(2, 2, 3, 4, 90).send({from: '0x15c7135f09322F9e4B00910aD6638bC0c50b8a5F' })
            .then(function(receipt) {

            })
            .catch(function(error) {

            });

    $('#getcount').click(function (e) {
    e.preventDefault();
    log("Calling getCount...");
    getGrade.getGrade.call(function (err, result) {
    if (err) {
        return error(err);
    } else {
        log("getCount call executed successfully.");
    }

    // The return value is a BigNumber object
    $('#count').text(result.toString());
});
});

    $('#increment').click(function (e) {
    e.preventDefault();

    if(web3.eth.defaultAccount === undefined) {
    return error("No accounts found. If you're using MetaMask, " +
    "please unlock it first and reload the page.");
}

    log("Calling increment...");

    getGrade.increment.sendTransaction(function (err, hash) {
    if (err) {
    return error(err);
}

    waitForReceipt(hash, function () {
    log("Transaction succeeded. " +
    "Call getCount again to see the latest count.");
});
});
});

});










function installMetamask(){

}

if (typeof(web3) === "undefined") {

} else {
    web3 = new Web3(web3.currentProvider);
    web3.eth.net.getId((error, networkId) => {
        if (networkId !== 5777) {
            log("Bad Network");
        }
    });
}







/**
    let vContract;
    let loader;
    let content;
    let appAccount;
    $(document).ready(function (){
        web3 = new Web3(web3.currentProvider);
        const address = '0x2f0bD33a010D317e0D6DF2b6b9bc263C2d475502';
        const abi = [
            {
                "inputs": [],
                "stateMutability": "nonpayable",
                "type": "constructor"
            },
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
                        "internalType": "uint256",
                        "name": "courseNumber",
                        "type": "uint256"
                    },
                    {
                        "internalType": "uint256",
                        "name": "studentNumber",
                        "type": "uint256"
                    }
                ],
                "name": "getGrade",
                "outputs": [
                    {
                        "components": [
                            {
                                "internalType": "uint256",
                                "name": "courseNumber",
                                "type": "uint256"
                            },
                            {
                                "internalType": "uint256",
                                "name": "sectionNumber",
                                "type": "uint256"
                            },
                            {
                                "internalType": "uint256",
                                "name": "instructorID",
                                "type": "uint256"
                            },
                            {
                                "internalType": "uint256",
                                "name": "studentNumber",
                                "type": "uint256"
                            },
                            {
                                "internalType": "uint256",
                                "name": "finalGrade",
                                "type": "uint256"
                            }
                        ],
                        "internalType": "struct Student.newGrade[]",
                        "name": "",
                        "type": "tuple[]"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
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
            },
            {
                "inputs": [],
                "name": "gradesCount",
                "outputs": [
                    {
                        "internalType": "uint256",
                        "name": "",
                        "type": "uint256"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "uint256",
                        "name": "courseNumber",
                        "type": "uint256"
                    },
                    {
                        "internalType": "uint256",
                        "name": "sectionNumber",
                        "type": "uint256"
                    },
                    {
                        "internalType": "uint256",
                        "name": "instructorID",
                        "type": "uint256"
                    },
                    {
                        "internalType": "uint256",
                        "name": "studentNumber",
                        "type": "uint256"
                    },
                    {
                        "internalType": "uint256",
                        "name": "finalGrade",
                        "type": "uint256"
                    }
                ],
                "name": "setGrade",
                "outputs": [],
                "stateMutability": "nonpayable",
                "type": "function"
            }
        ];
        let vContract = new web3.eth.Contract(abi, address);
        let loader = $("#loader");
        let content = $("#content");
        //render();
        //listenToEvents();
    });
    function render(){
        loader.show();
        content.hide();
        web3.eth.getCoinbase(function (err, account){
            if (err == null){
                appAccount = account;
                $("#accountAddress").html("Address: " + appAccount);
            }
        });

    }
**/