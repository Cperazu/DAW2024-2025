import java.util.Scanner;

public class CalculadoraSueldosHoras {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        // Solicitar tipo de empleado
        System.out.println("Ingrese el tipo de empleado (Junior, Semi-Senior, Senior): ");
        String tipoEmpleado = scanner.nextLine().trim();

        // Solicitar horas trabajadas
        System.out.println("Ingrese el número de horas trabajadas: ");
        int horasTrabajadas = scanner.nextInt();

        double sueldo = calcularSueldo(tipoEmpleado, horasTrabajadas);

        if (sueldo != -1) {
            System.out.println("El sueldo total del empleado es: $" + sueldo);
        } else {
            System.out.println("Tipo de empleado no válido.");
        }

        scanner.close();
    }

    public static double calcularSueldo(String tipoEmpleado, int horasTrabajadas) {
        double sueldoPorHora;
        double porcentajeBono;

        // Determinamos el sueldo por hora y el bono según el tipo de empleado
        switch (tipoEmpleado.toLowerCase()) {
            case "junior":
                sueldoPorHora = 10;
                porcentajeBono = 0.05;
                break;
            case "semi-senior":
                sueldoPorHora = 15;
                porcentajeBono = 0.10;
                break;
            case "senior":
                sueldoPorHora = 20;
                porcentajeBono = 0.15;
                break;
            default:
                return -1; // Retorna -1 si el tipo de empleado no es válido
        }

        // Calcula el sueldo base sin el bono
        double sueldoBase = sueldoPorHora * horasTrabajadas;

        // Calcula el bono
        double bono = sueldoBase * porcentajeBono;

        // Retorna el sueldo total sumando el sueldo base y el bono
        return sueldoBase + bono;
    }
}