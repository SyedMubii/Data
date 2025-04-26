const quizDB=[
{
	question:"Q1: What is the Full Form of HTML?",
	a:"Hello To My Land",
	b:"Hey Text Markeup Language",
	c:"HyperText Makeup Language",
	d:"HyperText Markeup Language",
	ans:"ans4"
},
{
	question:"Q2: What is the Full Form of HTML?",
	a:"Hello To My Land",
	b:"Hey Text Markeup Language",
	c:"HyperText Makeup Language",
	d:"HyperText Markeup Language",
	ans:"ans4"
},
{
	question:"Q3: What is the Full Form of HTML?",
	a:"Hello To My Land",
	b:"Hey Text Markeup Language",
	c:"HyperText Makeup Language",
	d:"HyperText Markeup Language",
	ans:"ans4"
}
];
const question=document.queryselector('.question');
const option1=document.queryselector('#option1');
const option2=document.queryselector('#option2');
const option3=document.queryselector('#option3');
const option4=document.queryselector('#option4');
const submit=document.queryselector('#submit');

const loadQuestion = ()	{
	question.innerText=quizDB[0].question; 
}
loadQuestion();