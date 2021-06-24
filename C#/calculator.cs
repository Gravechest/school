using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace C_opdrachten

{
    public partial class Form1 : Form
    {

        int input;
        int calcType;
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            output.Text += 1;
        }

        private void button2_Click(object sender, EventArgs e)
        {
            output.Text += 2;
        }

        private void button3_Click(object sender, EventArgs e)
        {
            output.Text += 3;
        }

        private void button4_Click(object sender, EventArgs e)
        {
            output.Text += 4;
        }

        private void button5_Click(object sender, EventArgs e)
        {
            output.Text += 5;
        }

        private void button6_Click(object sender, EventArgs e)
        {
            output.Text += 6;
        }

        private void button7_Click(object sender, EventArgs e)
        {
            output.Text += 7;
        }

        private void button8_Click(object sender, EventArgs e)
        {
            output.Text += 8;
        }

        private void button9_Click(object sender, EventArgs e)
        {
            output.Text += 9;
        }

        private void button0_Click(object sender, EventArgs e)
        {
            output.Text += 0;
        }

        private void vermenigvuldigen_Click(object sender, EventArgs e)
        {
            calcType = 1;
            input = int.Parse(output.Text);
            output.Text = null;
        }
        private void DeleteNum_Click(object sender, EventArgs e)
        {
            output.Text = output.Text.Remove(output.Text.Length - 1);
        }

        private void button14_Click(object sender, EventArgs e)
        {
            switch (calcType)
            {
                case 1:
                    output.Text = Convert.ToString(input * int.Parse(output.Text));
                    break;
                case 2:
                    output.Text = Convert.ToString(input / int.Parse(output.Text));
                    break;
                case 3:
                    output.Text = Convert.ToString(input - int.Parse(output.Text));
                    break;
                case 4:
                    output.Text = Convert.ToString(input + int.Parse(output.Text));
                    break;
            }
        }

        private void delen_Click(object sender, EventArgs e)
        {
            calcType = 2;
            input = int.Parse(output.Text);
            output.Text = null;
        }

        private void min_Click(object sender, EventArgs e)
        {
            calcType = 3;
            input = int.Parse(output.Text);
            output.Text = null;
        }

        private void plus_Click(object sender, EventArgs e)
        {
            calcType = 4;
            input = int.Parse(output.Text);
            output.Text = null;
        }

        private void output_TextChanged(object sender, EventArgs e)
        {

        }
    }
}
